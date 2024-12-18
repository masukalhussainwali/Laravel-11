@props(['headers' => [], 'rows' => []])
<div class="overflow-x-auto">
    <table class="w-full border-collapse border border-gray-300 dark:border-gray-700 text-left">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                @foreach ($headers as $header)
                    <th class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
        @foreach ($rows as $row)
            <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-800 dark:even:bg-gray-700">
                @foreach ($row as $cell)
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
